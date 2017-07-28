module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            dist: {
               src: [
                   'resources/assets/js/profile/*.js', // add directores when modules are created
                   'resources/assets/js/*.js'
               ],
                dest: 'public/js/app.js' //destination folder - unminified
            }  
        },
        compass: {
            dist: {
                options: {
                    sassDir: 'resources/assets/sass',
                    cssDir: 'public/css'
                }
            }
        },
        uglify: {
            dist: {
                files: {
                    'public/js/app.min.js': [ //destination folder - minified
                        'resources/assets/js/profile/*.js', // add directores when modules are created
                        'resources/assets/js/*.js'
                    ]
                }
            }
        },
        watch: {
            files: [
                'resources/assets/js/profile/*.js', // add directores when modules are created
                'resources/assets/js/*.js',
                'resources/assets/sass/*.scss'
            ],
            tasks: ['default']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['concat', 'compass', 'uglify']);
};