/** @type {import('tailwindcss').Config} */
module.exports = {

  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',

    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',

    './node_modules/@my-company/tailwind-components/**/*.js',
    { raw: '<div class="font-bold">', extension: 'html' },
],

 safelist: [
    'bg-red-500',
    'text-3xl',
    'lg:text-4xl',

    {
      pattern: /bg-(red|green|blue)-(100|200|300)/,
      variants: ['lg', 'hover', 'focus', 'lg:hover'],
    },
  ],


  theme: {

    container: {
      center: true,

      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },


extend: {
      columns: {
        '4xs': '14rem',
      },

       aspectRatio: {
        '4/3': '4 / 3',
      },

       spacing: {
        '13': '3.25rem',
      },
},


borderSpacing: {
        '13': '3.25rem',
      },


    screens: {
      'tablet': '640px',
      // => @media (min-width: 640px) { ... }

      'laptop': '1024px',
      // => @media (min-width: 1024px) { ... }

      'desktop': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
  },


  plugins: [],
}
