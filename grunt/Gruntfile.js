module.exports = function(grunt){
	var themeDir = '../wp-content/themes/twentyfourteen-portfolio/';
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			dist: {
				options: {
					sassDir: themeDir + 'sass',
					cssDir: themeDir + 'css'
				}
			}
		},		
		watch: {
			css: {
				tasks: ['compass'] ,
				files: '**/*.scss'
				
			}			
		}
	});
	
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.registerTask('default',['watch']);
}