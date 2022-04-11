<?php

namespace App\Http\Controllers\Boom;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


/**
 * Controller for namespace '/'.
 *
 */
class RootController extends Controller {
    /**
     * On `connect`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function connect(Request $request) {
        error_log('root::connect');

        return response(null);
    }

    /**
     * On `disconnecting`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function disconnecting(Request $request) {
        error_log('root::disconnecting');

        return response(null);
    }

    /**
     * On `disconnect`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function disconnect(Request $request) {
        error_log('root::disconnect');

        return response(null);
    }

    /**
     * On `error`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function error(Request $request) {
        error_log('root::error');

        return response(null);
    }
}
