module.exports = function (grunt) {

  require('jit-grunt')(grunt, {
    'less' : 'grunt-contrib-less',
    'uglify': 'grunt-contrib-uglify',
    'jshint': 'grunt-contrib-jshint',
    'watch' : 'grunt-contrib-watch',
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
        files: {
          '../css/style.css': 'less/style.less'
        }
      },
      develop_bootstrap: {
        options: {
          compress: false,
          strictMath: true,
          sourceMap: true,
          sourceMapRootpath: '../assets',
          paths: ['bower_components/bootstrap/less/']
        },
        files: {
          '../css/bootstrap.css': [
            'less/bootstrap.less',
          ],
        }
      },
      
      build: {
        options: {
          compress: true,
          cleancss: true,
          strictMath: true,
          paths: ['bower_components/bootstrap/less/']
        },
        files: {
          '../css/style.min.css': [
            'less/bootstrap.less',
            'less/style.less'
          ]
        }
      }
    },

    uglify: {
      options: {
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
        files: {
          '../js/components.js': [
            'bower_components/fingerprint/fingerprint.js',
            'bower_components/jasny-bootstrap/js/offcanvas.js',
            'bower_components/bootstrap/dist/js/bootstrap.js',
            'js/dropdowns-enhancement.js',
            'js/twitter.js',
          ]
        }
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
        files: ['less/bootstrap.less'],
        tasks: ['less:develop_bootstrap']
      },

      uglify_style: {
        files: ['js/*.js'],
        tasks: ['uglify:develop_script', 'jshint']
      }
    }
  });

  grunt.registerTask('build', ['develop_build', 'less:build', 'jshint', 'uglify:build']);
  grunt.registerTask('default', ['build']);
  grunt.registerTask('develop_build', ['less:develop_bootstrap', 'less:develop_style',
                                      'uglify:develop_script', 'uglify:develop_components',
                                      'jshint']);
  grunt.registerTask('develop', ['develop_build','watch']);
};