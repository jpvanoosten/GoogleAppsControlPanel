module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        watch: {
            options: {
                livereload: true,
            },
            php: {
                files: ['module/**/*.php', 'module/*/view/**/*.phtml'],
            },
            css: {
                files: ['public/css/*.css'],
            },
            images: {
                files: ['public/img/*.png'],
            },
            scripts: {
                files: ['public/js/*.js'],
            },
        },
    });

    // Load the 
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Register task(s).
    grunt.registerTask('default', ['watch']);

};