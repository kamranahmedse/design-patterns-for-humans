module.exports = {
  lang: 'en-US',
  title: 'Hello, VuePress!',
  description: 'This is my first VuePress site',
  themeConfig: {
    sidebar: [
      '/',
      {
        title: 'Simple Factory',
        path: '/simple-factory/',
      },
    ],
    logo: '/assets/img/logo.png'
  },
  plugins: [
    [
      'vuepress-plugin-typescript',
      {
        tsLoaderOptions: {
          // All options of ts-loader
        },
      },
    ],
  ],
  dest: 'dist'
}