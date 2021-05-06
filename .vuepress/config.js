module.exports = {
  lang: 'en-US',
  title: 'Design patterns for humans',
  description: 'Ultra-simplified explanation to design patterns!',
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
      {
        title: 'Behavioral Design Patterns',
        path: '/behavioral-design-patterns/',
        children: [
         '/behavioral-design-patterns/chain-of-responsibility/',
         '/behavioral-design-patterns/command/', 
         '/behavioral-design-patterns/iterator/', 
         '/behavioral-design-patterns/mediator/', 
         '/behavioral-design-patterns/memento/', 
         '/behavioral-design-patterns/observer/', 
         '/behavioral-design-patterns/visitor/',
         '/behavioral-design-patterns/strategy/',
         '/behavioral-design-patterns/state/',
         '/behavioral-design-patterns/template-method/',
        ]
      },
      {
        title: 'Wrap Up Folks',
        path: '/wrap-up-folks/',
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