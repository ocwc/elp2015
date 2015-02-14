module.exports = function (grunt) {

  require('jit-grunt')(grunt, {
    'less' : 'grunt-contrib-less',
    'uglify': 'grunt-contrib-uglify',
    'jshint': 'grunt-contrib-jshint',
    'watch' : 'grunt-contrib-watch',
    'cssmin': 'grunt-contrib-cssmin'
   });

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    less: {
      develop_style: {
        options: {
          compress: false,
          strictMath: true,
          sourceMap: true,
          sourceMapRootpath: '../assets',
          paths: ['bower_components/bootstrap/less/'],
        },
        files: [
          {src: 'less/style.less',
           dest: '../css/style.css',
           nonull: true}
        ]
      },
      
      develop_bootstrap: {
        options: {
          compress: false,
          strictMath: true,
          sourceMap: true,
          sourceMapRootpath: '../assets',
          paths: ['bower_components/bootstrap/less/']
        },
        files: [
          {src: 'less/bootstrap.less', 
           dest: '../css/bootstrap.css',
           nonull: true},
          {src: 'bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.css',
           dest: '../css/jasny-bootstrap.css',
           nonull: true}
        ]
      },
      
    },

    cssmin: {
      target: {
        files: [
          {dest: '../css/style.min.css',
           src: [
            '../css/bootstrap.css',
            '../css/jasny-bootstrap.css',
            '../css/style.css'
           ],
           nonull: true}
        ]
      }
    },

    uglify: {
      options: {
        nonull: true,
        sourceMap: true,
        compress: {
          drop_debugger: false
        },
        mangle: {
          drop_debugger: false
        }
      },
      build: {
        files: {
          '../js/script.min.js': [
            '../js/components.js',
            '../js/script.js',
          ]
        }
      },
      
      develop_components: {
        nonull: true,
        dest: '../js/components.js',
        src: [
            'bower_components/fingerprint/fingerprint.js',
            'bower_components/jasny-bootstrap/js/offcanvas.js',
            'bower_components/bootstrap/dist/js/bootstrap.js',
            // 'js/dropdowns-enhancement.js',
            // 'js/twitter.js',
        ],
      },
      
      develop_script: {
        files: {
          '../js/script.js': [
            'js/script.js'
          ]
        }
      }
    },

    jshint: {
      options: {
        debug: true
      },
      'all': ['js/script.js']
    },

    watch: {
      grunt: {
        files: ['Gruntfile.js']
      },

      options: {
        livereload: false,
      },

      less_style: {
        files: ['less/*.less'],
        tasks: ['less:develop_style']
      },

      less_bootstrap: {
        files: ['less/bootstrap.less', 'less/_variables.less'],
        tasks: ['less:develop_bootstrap']
      },

      uglify_style: {
        files: ['js/*.js'],
        tasks: ['uglify:develop_script', 'jshint']
      }
    }
  });

  grunt.registerTask('build', ['develop_build', 'cssmin', 'jshint', 'uglify:build']);
  grunt.registerTask('default', ['build']);
  grunt.registerTask('develop_build', ['less:develop_bootstrap', 'less:develop_style',
                                      'uglify:develop_script', 'uglify:develop_components',
                                      'jshint']);
  grunt.registerTask('develop', ['develop_build','watch']);
};