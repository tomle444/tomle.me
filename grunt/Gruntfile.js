module.exports = function(grunt){
	var themeDir = '../wp-content/themes/twentyfourteen-portfolio/';
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			dev: {
				options: {
					sassDir: themeDir + 'scss',
					cssDir: themeDir + 'css',
					outputStyle: 'expanded',
					environment: 'development'
				}
			}
		},
		watch: {
			livereload: {
                options: {
                    livereload: true
                },
                files: [
                    themeDir + 'css/{,**/}*.css'                   
                ]
            },
			 compass: {
                files: themeDir + 'scss/{,**/}*.scss',
                tasks: 'compass'
            }		
		}
	});
	
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.registerTask('default',['watch']);
}