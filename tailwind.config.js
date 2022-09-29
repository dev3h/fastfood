/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: "tw-",
  important: true,
  content: ["*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        header: '#222',
        yellow: '#ffca3c'
      }
    },
  },
  plugins: [],
};
