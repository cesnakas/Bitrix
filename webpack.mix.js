'use strict'

const mix = require('laravel-mix')

mix
  .js('local/assets/js/main.js', 'local/templates/main/js/')
  .sass('local/assets/scss/main.scss', 'local/templates/main/css/')
  .sourceMaps()
  .browserSync({
    proxy: {
      target: 'https://bx.chs.name',
      ws: true,
    },
    files: [
      'local/assets/**/*.*',
      './**/*.php'
    ],
    ui: false,
    open: true,
    reloadOnRestart: true,
    reloadDelay: 1000,
    watch: true,
    injectChanges: false
  })
  .disableSuccessNotifications()
