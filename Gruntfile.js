module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            dist: {
               src: [
                   'resources/assets/js/*.js' // add directores when modules are created
               ],
                dest: 'public/js/app.js' //destination folder - unminified
            }  
        },
        uglify: {
            dist: {
                files: {
                    'public/js/app.min.js': [ //destination folder - minified
                        'resources/assets/js/*.js' // add directores when modules are created
                    ]
                }
            }
        },
        watch: {
            files: [
                'resources/assets/js/*.js' // add directores when modules are created
            ],
            tasks: ['default']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['concat', 'uglify']); // add compass when scss added
};