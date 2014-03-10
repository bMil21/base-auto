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
		// Concat
		concat: {
			options: {
				separator: '\n\n;'
			},
			dist: {
				src: ['js/plugins/*.js'],
				dest: 'js/scripts.js'
			}
		}, 
		// Uglify
		uglify: {
			options: {
				mangle: false,
				preserveComments: 'some'
			},
			my_target: {
				files: {
					'js/scripts.js': ['js/scripts.js']
				}
			}
		}, 
		// Watch
		watch: {
			stylus: {
				files: ['sass/*.scss'], 
				tasks: ['sass']
			}, 
			scripts: {
				files: ['js/plugins/*.js'], 
				tasks: 'concat'
			}, 
			uglify: {
				files: ['js/scripts.js'],
				tasks: 'uglify'
			}
		}
	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);

};