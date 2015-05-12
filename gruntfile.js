module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  // Project configuration.
  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "css/styles.min.css": "css/less/styles.less",
        }
      }
    },
    watch: {
      styles: {
        files: ['css/less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    },
    uglify:{
      options: {
        mangle: false
      },
      my_target: {
        files: [{
              'js/output.min.js': ['js/jquery-1.11.2.js', 'js/jquery-ui.js', 'js/bootstrap.js','js/moment.js','js/querybuilder.js','js/tagit.js']
          }]
      }
    }
  });


  // Default task(s).
  grunt.registerTask('default', ['less', 'uglify','watch']);

};