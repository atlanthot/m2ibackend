module.exports = function(grunt) {

grunt.initConfig({
  "babel": {
    options: {
      sourceMap: true,
      presets: ['es2015']
    },
    dist: {
      files: {
        "dist/app.js": "js/main.js"
      }
    }
  }
});


grunt.loadNpmTasks('grunt-babel');
grunt.registerTask("default", ["babel"]);

};