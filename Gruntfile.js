'use strict';

module.exports = function (grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Define the configuration for all the tasks
    grunt.initConfig({
      // Add vendor prefixed styles
      autoprefixer: {
        dist: {
          files: {
            'style.css': 'style.css'
          }
        },
        options: {
          browsers: ['last 2 version', 'ie 8', 'ie 9']
        }
      },

      sass: {
        dist: {
          options: {
            sourcemap: 'auto',
            style: 'expanded'
          },
          files: {
            'style.css': 'sass/style.scss'
          }
        }
      },

      cssmin: {
        dist: {
          files: {
            'style.css': ['style.css']
          }
        }
      },

      uglify: {
        options: {
          sourceMap: true
        },
        dist: {
          files: {
            'js/scripts.min.js': ['js/scripts.js']
          }
        }
      },

      svgmin: {
        icons: {
          files: [{
            expand: true,
            cwd: '_icons/src',
            src: ['*.svg'],
            dest: "_icons/dist/svg"
          }]
        }
      },

      grunticon: {
        options: {
        },
        icons: {
          options: {
            cssprefix: '.iph-icon-'
          },
          files: [{
            expand: true,
            cwd: '_icons/dist/svg',
            src: ['*.svg'],
            dest: "_icons/dist"
          }],
        }
      },

      svgstore: {
        options: {
          prefix : 'iph-icon-',
          svg: {
            xmlns: 'http://www.w3.org/2000/svg',
            'xmlns:xlink': 'http://www.w3.org/1999/xlink',
            viewBox : '0 0 0 0'
          }
        },
        icons: {
          files: {
            '_icons/dist/icon-sprite.svg': ['_icons/dist/svg/*.svg'],
          },
        }
      },

      watch: {
        sass: {
          files: ['sass/**/*.scss'],
          tasks: ['sass']
        },
        js: {
          files: ['js/scripts.js'],
          tasks: ['uglify']
        },
        php: {
          files: ['**/*.php']
        },
        icons: {
          files: ['icons/src/*.svg'],
          tasks: ['svg']
        },
        options: {
          livereload: true,
        },
      }

    });

    // Define your default tasks
    grunt.registerTask('svg', [
      'svgmin',
      'grunticon',
      'svgstore'
    ]);

    grunt.registerTask('default', [
      'sass',
      'autoprefixer',
      // 'uglify'
      // 'svg'
    ]);

    grunt.registerTask('dev', [
      'default',
      'watch',
    ]);

    grunt.registerTask('dist', [
      'default',
      'cssmin:dist',
      'uglify:dist'
    ]);
};
