@extends('layouts.app')

@section('content')
<div class="container">
    <h1>カラー設定</h1>
    <form id="color-form" method="POST" action="{{ route('color.update') }}">
        @csrf
        <div class="mb-3">
            <label for="primary-color" class="form-label">Primary Color</label>
            <input type="color" class="form-control form-control-color" id="primary-color" name="primary" value="{{ $colors['primary'] ?? '#0d6efd' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="secondary-color" class="form-label">Secondary Color</label>
            <input type="color" class="form-control form-control-color" id="secondary-color" name="secondary" value="{{ $colors['secondary'] ?? '#6c757d' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="success-color" class="form-label">Success Color</label>
            <input type="color" class="form-control form-control-color" id="success-color" name="success" value="{{ $colors['success'] ?? '#198754' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="info-color" class="form-label">Info Color</label>
            <input type="color" class="form-control form-control-color" id="info-color" name="info" value="{{ $colors['info'] ?? '#0dcaf0' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="warning-color" class="form-label">Warning Color</label>
            <input type="color" class="form-control form-control-color" id="warning-color" name="warning" value="{{ $colors['warning'] ?? '#ffc107' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="danger-color" class="form-label">Danger Color</label>
            <input type="color" class="form-control form-control-color" id="danger-color" name="danger" value="{{ $colors['danger'] ?? '#dc3545' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="light-color" class="form-label">Light Color</label>
            <input type="color" class="form-control form-control-color" id="light-color" name="light" value="{{ $colors['light'] ?? '#f8f9fa' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="dark-color" class="form-label">Dark Color</label>
            <input type="color" class="form-control form-control-color" id="dark-color" name="dark" value="{{ $colors['dark'] ?? '#212529' }}" title="Choose your color">
        </div>
        <!-- ダークモード用のカラーも同様に設定 -->
        <div class="mb-3">
            <label for="dark-primary-color" class="form-label">Dark Mode Primary Color</label>
            <input type="color" class="form-control form-control-color" id="dark-primary-color" name="dark_primary" value="{{ $colors['dark_primary'] ?? '#375a7f' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="dark-secondary-color" class="form-label">Dark Mode Secondary Color</label>
            <input type="color" class="form-control form-control-color" id="dark-secondary-color" name="dark_secondary" value="{{ $colors['dark_secondary'] ?? '#444444' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="dark-success-color" class="form-label">Dark Mode Success Color</label>
            <input type="color" class="form-control form-control-color" id="dark-success-color" name="dark_success" value="{{ $colors['dark_success'] ?? '#00bc8c' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="dark-info-color" class="form-label">Dark Mode Info Color</label>
            <input type="color" class="form-control form-control-color" id="dark-info-color" name="dark_info" value="{{ $colors['dark_info'] ?? '#3498db' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="dark-warning-color" class="form-label">Dark Mode Warning Color</label>
            <input type="color" class="form-control form-control-color" id="dark-warning-color" name="dark_warning" value="{{ $colors['dark_warning'] ?? '#f39c12' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="dark-danger-color" class="form-label">Dark Mode Danger Color</label>
            <input type="color" class="form-control form-control-color" id="dark-danger-color" name="dark_danger" value="{{ $colors['dark_danger'] ?? '#e74c3c' }}" title="Choose
            your color">
        </div>
        <div class="mb-3">
            <label for="dark-light-color" class="form-label">Dark Mode Light Color</label>
            <input type="color" class="form-control form-control-color" id="dark-light-color" name="dark_light" value="{{ $colors['dark_light'] ?? '#2c3e50' }}" title="Choose your color">
        </div>
        <div class="mb-3">
            <label for="dark-dark-color" class="form-label">Dark Mode Dark Color</label>
            <input type="color" class="form-control form-control-color" id="dark-dark-color" name="dark_dark" value="{{ $colors['dark_dark'] ?? '#1a252f' }}" title="Choose your color">
        </div>
        <button type="submit" class="btn btn-primary" id="saveButton">保存</button>
        <button type="button" class="btn btn-secondary" id="resetButton">リセット</button>
    </form>
    <button type="button" class="btn btn-dark" id="darkModeToggle">ダークモード切替</button>
</div>
@endsection

