module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            dist: {
               src: [
                   'resources/assets/js_raw/*.js' // add directores when modules are created
               ],
                dest: 'public/js/main_script.js' //destination folder - unminified
            }  
        },
        uglify: {
            dist: {
                files: {
                    'public/js/main_script.min.js': [ //destination folder - minified
                        'resources/assets/js_raw/*.js' // add directores when modules are created
                    ]
                }
            }
        },
        watch: {
            files: [
                'resources/assets/js_raw/*.js' // add directores when modules are created
            ],
            tasks: ['default']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['concat', 'uglify']); // add compass when scss added
};