const mix = require('laravel-mix');
require('laravel-mix-purgecss');

// Admin
mix.copyDirectory("resources/admin/plugins/global/fonts", "public/fonts");

mix.styles(
    [
        "resources/admin/plugins/global/plugins.bundle.css",
        "resources/admin/plugins/custom/prismjs/prismjs.bundle.css",
        "resources/admin/css/style.bundle.css",
    ],
    "public/css/theme-admin.css"
).purgeCss({
    enabled: mix.inProduction(),
});

mix.styles(
    [
        "resources/admin/css/pages/users/login-4.css",
    ],
    "public/css/theme-auth.css"
).purgeCss({
    enabled: mix.inProduction(),
});

mix.styles(
    [
        "resources/admin/css/themes/layout/header/base/light.css",
        "resources/admin/css/themes/layout/header/menu/light.css",
        "resources/admin/css/themes/layout/brand/dark.css",
        "resources/admin/css/themes/layout/aside/dark.css",
    ],
    "public/css/layouts-admin.css"
).purgeCss({
    enabled: mix.inProduction(),
});

mix.styles(
    [
        "resources/admin/plugins/custom/datatables/datatables.bundle.css",
    ],
    "public/css/datatables-admin.css"
).purgeCss({
    enabled: mix.inProduction(),
});

mix.scripts(
    [
        "resources/admin/plugins/global/plugins.bundle.js",
        "resources/admin/plugins/custom/prismjs/prismjs.bundle.js",
        "resources/admin/js/scripts.bundle.js",
    ],
    "public/js/theme-admin.js"
).purgeCss({
    enabled: mix.inProduction(),
});

mix.scripts(
    [
        "resources/admin/js/pages/custom/login/login-4.js",
    ],
    "public/js/theme-auth.js"
).purgeCss({
    enabled: mix.inProduction(),
});

mix.scripts(
    [
        "resources/admin/plugins/custom/datatables/datatables.bundle.js",
    ],
    "public/js/datatables-admin.js"
).purgeCss({
    enabled: mix.inProduction(),
});

if (mix.inProduction()) {
    mix.version();
  }
  mix.setPublicPath(path.resolve('./'))
