Elixir.webpack.mergeConfig({
    module: {
        loaders: [{
            test: /\.html$/,
            loader: 'html'
        }, {
            test: /\.json$/,
            loader: 'json'
        }]}
});