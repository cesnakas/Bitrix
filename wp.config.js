'use strict'

const path = require('path')
const HtmlWebpackPlugin = require('html-webpack-plugin')

module.exports = {
  mode: 'development',
  entry: path.resolve(__dirname, 'local/templates/main/assets/index.js'),
  output: {
    path: path.resolve(__dirname, 'local/templates/main/dist'),
    filename: 'main.js',
    clean: true
  },
  devServer: {
    static: path.resolve(__dirname, 'local/templates/main/dist'),
    watchFiles: [
      path.resolve(__dirname, 'local/templates/main/assets/pages/**/*.html'),
      path.resolve(__dirname, 'local/templates/main/assets/scss/**/*.scss')
    ],
    port: 8080,
    hot: true,
    open: true
  },
  plugins: [
    new HtmlWebpackPlugin({ template: './local/templates/main/assets/pages/index.html' })
  ],
  module: {
    rules: [
      {
        mimetype: 'image/svg+xml',
        scheme: 'data',
        type: 'asset/resource',
        generator: {
          filename: 'icons/[hash].svg'
        }
      },
      {
        test: /\.(scss)$/,
        use: [
          {
            // Adds CSS to the DOM by injecting a `<style>` tag
            loader: 'style-loader'
          },
          {
            // Interprets `@import` and `url()` like `import/require()` and will resolve them
            loader: 'css-loader'
          },
          {
            // Loader for webpack to process CSS with PostCSS
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: () => [
                  autoprefixer
                ]
              }
            }
          },
          {
            // Loads a SASS/SCSS file and compiles it to CSS
            loader: 'sass-loader'
          }
        ]
      }
    ]
  }
}
