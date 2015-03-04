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
				src: ['js/libs/jquery.js', 'js/plugins/*.js'],
				dest: 'js/scripts.js'
			}
		}, 
		// Uglify
		uglify: {
			options: {
				mangle: false,
				//beautify: true, // debug js
				preserveComments: 'some'
			},
			my_target: {
				files: {
					'js/scripts.js': ['js/scripts.js']
				}
			}
		}, 
		// Concurrent
		concurrent: {
			first: ['concat'],
			second: ['uglify']
		}, 
		// Watch
		watch: {
			sass: {
				files: ['sass/*.scss', 'sass/*/*.scss'], 
				tasks: ['sass']
			}, 
			scripts: {
				files: ['js/plugins/*.js'], 
				tasks: 'concurrent'
			}
		}
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-concurrent');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch', 'concurrent:first', 'concurrent:second']);

};