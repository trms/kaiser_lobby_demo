module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: '<%= concat.dist.dest %>',
        dest: '<%= concat.dist.dest %>'
      }
    },

    watch: {
	  scripts: {
	    files: ['public/**/*.js','app/views/**/*','app/style/**/*','public/style/main.concat.css','public/style.admin.concat.css'],
	    tasks: ['sass'],
	    options: {
	     
        livereload:true
	    },
  	  },
  	},

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'

        },
        files: {                         // Dictionary of files
          'public/style/main.css': 'app/style/main.scss'       // 'destination': 'source'
        }
      }
    },

  	concat: {
	    options: {
	      separator: ';',
	    },
	    dist: {
	      src: [

          'bower_components/jquery/dist/jquery.js',
          'bower_components/keyboard/js/jquery.keyboard.js',
          'bower_components/jquery.dragscrollable/dragscrollable.js'
        
        ],
	      dest: 'public/js/project.concat.js',
	    },
    },

    concat_css: {
      options: {
        // Task-specific options go here.
      },
      // admin: {
      //   src: [

      //     "bower_components/bootstrap/dist/css/bootstrap.css",
      //     "bower_components/bootstrap/dist/css/bootstrap-theme.css",

          
      //     ],
      //   dest: "public/style/admin.concat.css"
      // },
      main: {
        src: [
          
          "bower_components/keyboard/css/keyboard.css",
          
          ],
        dest: "public/style/main.concat.css"
      },
    },
    
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-concat-css');
  grunt.loadNpmTasks('grunt-contrib-sass');
 

  // Default task(s).
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('combine',['concat','concat_css']);
  grunt.registerTask('minnify',['uglify']);
  
};