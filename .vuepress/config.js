module.exports = {
  lang: 'en-US',
  title: 'Hello, VuePress!',
  description: 'This is my first VuePress site',
  themeConfig: {
    sidebar: [
      '/',
      {
        title: 'Creational Design Patterns',
        path: '/creational-design-patterns/',
        children: [
         '/creational-design-patterns/simple-factory/',
         '/creational-design-patterns/factory-method/', 
         '/creational-design-patterns/abstract-factory/', 
         '/creational-design-patterns/builder/', 
         '/creational-design-patterns/prototype/', 
         '/creational-design-patterns/singleton/'
        ]
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