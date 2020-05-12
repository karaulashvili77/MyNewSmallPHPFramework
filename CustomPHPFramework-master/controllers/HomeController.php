<?php

class HomeController
{
    public function home()
    {
        return "Home";
    }

    public function contact(IRequest $request, Router $router)
    {
        // Get submitted data
        $data = $request->getBody();

        // Validation
        $errors = [];
        if (!$data['email']) {
            $errors['email'] = "This field is required";
        }

        if (empty($errors)) {
            // Email sending
        }

        // Render form with errors
        return $router->renderView('contact', [
            'errors' => $errors,
            'data' => $data
        ]);
    }
}