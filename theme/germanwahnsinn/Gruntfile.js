

module.exports = function (grunt) {
    'use strict';

    require('load-grunt-tasks')(grunt);

    //
    // Grunt config
    //
    grunt.initConfig({
        srcFolder: 'src/',
        outputFolder: 'build/',


        pkg      : grunt.file.readJSON('package.json'),

        //
        // template processing
        //
        jshint    : {
            options: {
                jshintrc: true
            },
            app    : {
                src    : ['js/main.js', 'js/halftone.js','!main-build.js']
            },
            self   : {
                src    : 'Gruntfile.js'
            }
        },
        uglify: {
            dest: {
                files: {
                    'js/main-build.js': [
                        'js/main.js'
                    ]
                }
            }
        },
        //
        // css handling
        //
        sass: {
            dist: {
                files: [{
                    expand: true,
                    cwd: 'scss',
                    src: ['**/*.scss'],
                    dest: 'css',
                    ext: '.css'
                }]
            }
        },
        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')({
                        browsers: ['last 2 versions']
                    })
                ]
            },
            dist: {
                src: 'css/*.css'
            }
        },
        modernizr: {
            dist: {
                devFile : 'js/lib/modernizr.js',
                outputFile : 'js/lib/modernizr-custom.js',

                // By default, this task will crawl your project for references to Modernizr tests.
                // Set to false to disable.
                parseFiles : true,

                // When parseFiles = true, this task will crawl all *.js, *.css, *.scss and *.sass files,
                // except files that are in node_modules/.
                // You can override this by defining a 'files' array below.
                'files' : {
                     'src': ['scss/*.scss','scss/**/*.scss','scss/**/**/*.scss', 'js']
                }
            }
        },
        // svg handling/processing
        //
        svgmin: {
            options: {
                plugins: [
                ]
            },
            multiple: {
                files: [{
                    cwd: 'svg',
                    expand: true,
                    src: ['*.svg'],
                    dest: '.tmp/'
                }]
            }
        },
        svgstore: {
            options: {
                svg: { // will add and overide the the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
                    class : 'is-hidden',
                    xmlns: 'http://www.w3.org/2000/svg'
                }
            },
            default : {
                files: {
                    '_sprite.svg.twig': ['.tmp/*.svg'],
                    '_logo.svg.twig': ['gw_logo.svg','gw_logo_mouseover.svg']
                }
            }
        },
        //
        // Utilities
        //
        watch     : {
            js  : {
                files: ['js/**/*.js'],
                tasks: ['jshint:app', 'uglify', 'modernizr']
            },
            sass: {
                files: ['scss/**/*.scss'],
                tasks: ['sass', 'postcss', 'modernizr']
            },
            svg : {
                files: ['svg/**/*.svg'],
                tasks: ['svgmin', 'svgstore']
            }
        }
    });

    grunt.registerTask('build', [
        'sass',
        'postcss',
        'svgmin',
        'svgstore',
        'modernizr',
        'jshint',
        'uglify'
    ]);

    grunt.registerTask('default', ['build', 'watch']);
};
