/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: {
      fontFamily: {
        oswald: "Oswald",
        poppins: "Poppins",
      },
      colors: {
        primary: "#666666",
        secondary: "#36bcab",
      },
    },
  },
  plugins: [],
};
