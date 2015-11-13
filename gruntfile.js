module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            production: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'style.css': 'assets/sass/style.scss'				}
            },
            development: {
                files: {
                    'style.dev.css': 'assets/sass/style.scss'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', ['sass']);

};