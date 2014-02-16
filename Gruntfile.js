/*!
 * Grunt - LESS Compiler by Mark Rivera : imarkdesigns@gmail.com, 2013-14
 * Copyright by iMarkDesigns
 *
 * Grunt LESS Compiler
 */

module.exports = function(grunt) {
  
  grunt.initConfig ({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        
        files: {
          "./assets/css/default.css": "./assets/less/default.less"  
        }
      }
    }, // Less
    watch: {
      styles: {
        files: ['./assets/less/**/*.less'],
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    } // Watch
  });
  
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);

};
