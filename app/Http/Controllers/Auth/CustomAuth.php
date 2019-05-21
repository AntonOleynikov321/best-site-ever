<?php

namespace App\Http\Controllers\Auth;

trait CustomAuth {

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function loginUsername() {
        return property_exists($this, 'username') ? $this->username : 'name';
    }

}
