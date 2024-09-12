/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
  tailwind.config = {
    darkMode: 'class',
    theme: {
      extend: {}
    }
  }

  module.exports = {
    theme: {
      extend: {
        keyframes: {
          'animate-circle': {
            '0%': { transform: 'translateY(0) rotate(0deg)', opacity: '1', borderRadius: '0' },
            '100%': { transform: 'translateY(-1000px) rotate(720deg)', opacity: '0', borderRadius: '50%' },
          },
          zoomIn: {
            '0%': { opacity: '0', transform: 'scale3d(0.3, 0.3, 0.3)' },
            '50%': { opacity: '1' },
          },
        },
        animation: {
          'animate-circle': 'animate-circle 25s linear infinite',
          'animate-circle-12': 'animate-circle 12s 2s linear infinite',
          'animate-circle-18': 'animate-circle 18s 0s linear infinite',
          'animate-circle-45': 'animate-circle 45s 15s linear infinite',
          'animate-circle-35': 'animate-circle 35s 2s linear infinite',
          'animate-circle-11': 'animate-circle 11s 0s linear infinite',
          zoomIn: 'zoomIn 1s ease-out forwards',
        },
      },
    },
    plugins: [],
  };
