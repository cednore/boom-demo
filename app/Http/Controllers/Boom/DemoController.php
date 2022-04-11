<?php

namespace App\Http\Controllers\Boom;

use Illuminate\Http\Request;
use Boom\Facades\Boom as IO;

use App\Http\Controllers\Controller;


/**
 * Controller for namespace '/demo'.
 *
 */
class DemoController extends Controller {
    /**
     * On `connect`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function connect(Request $request) {
        error_log('demo::connect');

        return response(null);
    }

    /**
     * On `disconnecting`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function disconnecting(Request $request) {
        error_log('demo::disconnecting');

        return response(null);
    }

    /**
     * On `disconnect`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function disconnect(Request $request) {
        error_log('demo::disconnect');

        return response(null);
    }

    /**
     * On `error`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function error(Request $request) {
        error_log('demo::error');

        return response(null);
    }

    /**
     * On `chat`.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chat(Request $request) {
        error_log('demo::chat');

        $message = $request->event['args'][0];
        IO::of('demo')->emit('chat', $message);

        return response(null);
    }
}
