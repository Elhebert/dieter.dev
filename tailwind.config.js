/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        h1: {
                            color: "#ECC127",
                        },
                        h2: {
                            color: "#ECC127",
                        },
                        h3: {
                            color: "#ECC127",
                        },
                        h4: {
                            color: "#ECC127",
                        },
                        h5: {
                            color: "#ECC127",
                        },
                        h6: {
                            color: "#ECC127",
                        },
                        a: {
                            "@apply no-underline hover:underline font-bold text-[#3736C6]":
                                "",
                        },
                    },
                },
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
