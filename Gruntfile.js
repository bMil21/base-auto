module.exports = function(grunt) {

	// Project Configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Sass
		sass: {
			dist: {
				options: {
					style: 'compressed',
					compass: true
				},
				files: {
					'style.css': 'sass/style.scss'
				}
			}
		}, 
		// Watch
		watch: {
			stylus: {
				files: ['sass/*.scss'], 
				tasks: ['sass']
			}
		}
	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['sass', 'watch']);

};