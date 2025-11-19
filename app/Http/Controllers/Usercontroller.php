<?php

public function index() {
    return response()->json(User::all());
}
public function store(Request $request) {
    $user = User::create($request->all());
    return response()->json($user, 201);
}
