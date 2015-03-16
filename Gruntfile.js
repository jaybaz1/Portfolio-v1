
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
	sass: {
		dist: {
			files: {
				'assets/css/main.css': 'assets/css/main.scss'
			}
		}
	},
	uglify: {
		options: {
			compress: {
				drop_console: true
			}
		},
		my_target: {
			files: {
				'assets/js/main.min.js': ['assets/js/main.js']
			}
		}
	},
	cssmin: {
		combine: {
			files: {
				'assets/css/main.min.css': ['assets/css/main.css']
			}
		}
	}
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', ['uglify']);
  grunt.registerTask('live', ['uglify', 'sass', 'cssmin']);

};
