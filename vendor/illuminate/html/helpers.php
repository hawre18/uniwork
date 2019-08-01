<?php
function upload_files(\Illuminate\Http\Request $request)
{
    $image_path = '';
    if ($request->hasFile('image')) {
        $upload_require = [
            'file' => $request->file('image'),
            'valid_extensions' => ['jpeg', 'png', 'jpg', 'gif', 'svg'],
            'destination_path' => '/blogs/',
            'valid_size' => 2,
        ];
        $image_path = upload_file($upload_require['file'], $upload_require['valid_extensions'], $upload_require['destination_path'], $upload_require['valid_size']);
    }
}

if ( ! function_exists('link_to'))
{
    /**
     * Generate a HTML link.
     *
     * @param  string  $url
     * @param  string  $title
     * @param  array   $attributes
     * @param  bool    $secure
     * @return string
     */
    function link_to($url, $title = null, $attributes = array(), $secure = null)
    {
        return app('html')->link($url, $title, $attributes, $secure);
    }
}

if ( ! function_exists('link_to_asset'))
{
    /**
     * Generate a HTML link to an asset.
     *
     * @param  string  $url
     * @param  string  $title
     * @param  array   $attributes
     * @param  bool    $secure
     * @return string
     */
    function link_to_asset($url, $title = null, $attributes = array(), $secure = null)
    {
        return app('html')->linkAsset($url, $title, $attributes, $secure);
    }
}

if ( ! function_exists('link_to_route'))
{
    /**
     * Generate a HTML link to a named route.
     *
     * @param  string  $name
     * @param  string  $title
     * @param  array   $parameters
     * @param  array   $attributes
     * @return string
     */
    function link_to_route($name, $title = null, $parameters = array(), $attributes = array())
    {
        return app('html')->linkRoute($name, $title, $parameters, $attributes);
    }
}

if ( ! function_exists('link_to_action'))
{
    /**
     * Generate a HTML link to a controller action.
     *
     * @param  string  $action
     * @param  string  $title
     * @param  array   $parameters
     * @param  array   $attributes
     * @return string
     */
    function link_to_action($action, $title = null, $parameters = array(), $attributes = array())
    {
        return app('html')->linkAction($action, $title, $parameters, $attributes);
    }
}
