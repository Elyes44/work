const Encore = require("@symfony/webpack-encore");

Encore.setOutputPath("public/build/")
  .setPublicPath("/build")
  .addEntry("app", "./assets/app.js")
  .splitEntryChunks()
  .enableSingleRuntimeChunk()
  .cleanupOutputBeforeBuild()
  .enableBuildNotifications()
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction())
  .configureBabel((config) => {
    config.plugins.push("@babel/plugin-proposal-class-properties");
  })
  .configureBabelPresetEnv((config) => {
    config.useBuiltIns = "usage";
    config.corejs = "3.38";
  })
  .enableSassLoader()
  .autoProvidejQuery()
  .enablePostCssLoader()
  .addAliases({
    "@fullcalendar/core": require.resolve("@fullcalendar/core"),
    "@fullcalendar/daygrid": require.resolve("@fullcalendar/daygrid"),
    "@fullcalendar/timegrid": require.resolve("@fullcalendar/timegrid"),
    "@fullcalendar/interaction": require.resolve("@fullcalendar/interaction"),
  });

module.exports = Encore.getWebpackConfig();
