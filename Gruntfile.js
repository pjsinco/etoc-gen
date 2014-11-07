module.exports = function(grunt) {

  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-contrib-compass");
  grunt.loadNpmTasks("grunt-contrib-jade");
  grunt.loadNpmTasks("grunt-contrib-uglify");


  grunt.initConfig({

    uglify: {
      dev: {
        files: {
          'builds/dev/js/script.js': ['components/js/**/*.js']
        }
      }
    },

    compass: {
      dev: {
        options: {
          config: 'config.rb'
        }
      }
    },

    jade: {
      compile: {
        options: {
          pretty: true,
        },
        files: [{
          expand: true,
          cwd: 'components/jade/',
          src: '**/*.jade',
          dest: 'builds/dev',
          ext: '.html'
        }]
      }
    },

    watch: {
      options: {
        livereload: true
      },
      
      sass: {
        files: ['components/sass/**/*.scss'],
        tasks: ['compass:dev'] 
      },

      compileHtml: {
        files: ['components/jade/*.jade'],
        tasks: ['jade']
      },

      scripts: {
        files: ['components/js/**/*.js'],
        tasks: ['uglify']
      }
    
    } // watch
  }); // initConfig
  
  grunt.registerTask('default', ['watch']);

}; // exports

