module.exports = function(grunt) {
  grunt.initConfig({
    less: {
      production: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "dist/chuckcss.min.css": "chuckcss/front.less",
          "dist/bootstrap-override.min.css": "chuckcss/bootstrap/bootstrap-override.less",
          "dist/print.css": "chuckcss/print.less"
        }
      },
      development: {
        files: {
          "dist/bootstrap.css": "chuckcss/bootstrap/bootstrap-override.less",
          "dist/chuckcss.css": "chuckcss/front.less",
          "dist/print.css": "chuckcss/print.less"
        }
      }
    },

    watch: {
      styles: {
        files: ['chuckcss/*.less','chuckcss/**/*.less'],
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);



};
