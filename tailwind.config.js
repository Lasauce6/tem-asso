/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'red-img': 'url("https://images.unsplash.com/photo-1519181245277-cffeb31da2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&fit=crop&w=460&h=340&q=100")',
                'yellow-img': 'url("https://images.unsplash.com/photo-1485550409059-9afb054cada4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&fit=crop&w=460&h=340&q=100")'
            },
            colors: {
                gray: {
                    '900': '#0f1011'
                }
            },
            minHeight: {
                '14': '3.5rem'
            },
            minWidth: {
                '14': '3.5rem'
            },
            transitionTimingFunction: {
                'in-out': 'cubic-bezier(0.2, 1, 0.25, 1)'
            }
        }
    },
    plugins: [],
}

