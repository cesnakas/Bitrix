'use strict'

const mix = require('laravel-mix')

mix
  .setPublicPath('./')
  .browserSync({
    watch: true,
    reloadOnRestart: true,
    open: 'local',
    proxy: {
      target: 'https://bx.chs.name',
      ws: true,
    },
  })
  .disableSuccessNotifications()

mix
  .sass('local/assets/scss/main.scss', 'local/templates/main/css/').sourceMaps().browserSync()
  .js('local/assets/js/main.js', 'local/templates/main/js/').browserSync()
