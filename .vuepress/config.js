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
      {
        title: 'Structural Design Patterns',
        path: '/structural-design-patterns/',
        children: [
         '/structural-design-patterns/adapter/',
         '/structural-design-patterns/bridge/', 
         '/structural-design-patterns/composite/', 
         '/structural-design-patterns/decorator/', 
         '/structural-design-patterns/facade/', 
         '/structural-design-patterns/flyweight/', 
         '/structural-design-patterns/proxy/',
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