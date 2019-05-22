/**
 * As our first step, we'll pull in the user's webpack.mix.js
 * file. Based on what the user requests in that file,
 * a generic config object will be constructed for us.
 */
let mix = require('laravel-mix/src/index');

let ComponentFactory = require('laravel-mix/src/components/ComponentFactory');

new ComponentFactory().installAll();

require(Mix.paths.mix());

/**
 * Just in case the user needs to hook into this point
 * in the build process, we'll make an announcement.
 */

Mix.dispatch('init', Mix);

/**
 * Now that we know which build tasks are required by the
 * user, we can dynamically create a configuration object
 * for Webpack. And that's all there is to it. Simple!
 */

let WebpackConfig = require('laravel-mix/src/builder/WebpackConfig');

module.exports = new WebpackConfig().build();

var HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports.plugins.push(
	new HtmlWebpackPlugin({ template: path.resolve(__dirname, './resources/views/index.html'),inject: false})
);

var PrerenderSpaPlugin = require('prerender-spa-plugin');

module.exports.plugins.push(
  new PrerenderSpaPlugin(path.join(__dirname, './dist'), ['/'])
);

