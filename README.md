# Laravel Validation Rules Package

A package to add custom validation rules for Laravel, including country-based phone number validation.

## 🚀 Features
- Country-based phone number validation.
- International phone number validation.
- Easy integration with Laravel validation.
- Supports multiple countries (more coming soon).

---

## 📦 Installation
You can install the package via Composer:

```sh
composer require byteweld/laravel-validation-rules
```

After installation, Laravel will automatically discover the service provider.

If you're using Laravel <5.5, you need to add the service provider manually in `config/app.php`:

```php
'providers' => [
    Byteweld\ValidationRules\Providers\ValidationServiceProvider::class,
],
```

---

## 🛠 Usage
You can use the validation rules in Laravel’s validation system.

### 📞 Country-Based Phone Number Validation
#### Rule: `phone_number:{country}`
This rule validates a phone number based on country-specific criteria.

#### Example Usage
```php
$request->validate([
    'phone' => 'required|phone_number:india',
]);
```

#### Validation Logic for India
✅ Must contain **only numbers**  
✅ Length must be **exactly 10 digits**  
✅ Must start with **6, 7, 8, or 9**  

---

### 🌎 International Phone Number Validation
#### Rule: `international_phone_number:{country}`
This rule validates international phone numbers according to country-specific formats.

#### Example Usage
```php
$request->validate([
    'phone' => 'required|international_phone_number:india',
]);
```

#### Validation Logic for India
✅ Must contain **only numbers**  
✅ Length must be **exactly 13 characters**  
✅ Must start with **+91** followed by a **10-digit mobile number**  
✅ The number must start with **6, 7, 8, or 9**  

---

## 🧪 Running Tests
To ensure everything works as expected, run the tests:

```sh
php artisan test
```

---

## 🛠 Customization
You can extend the validation for more countries. To contribute, submit a **pull request** on [GitHub](https://github.com/byteweld/laravel-validation-rules).

---

## 📌 Versioning
This package follows **semantic versioning** (`MAJOR.MINOR.PATCH`).

- `v1.0.0` - Initial release with basic validation.
- `v1.1.0` - Added support for international phone validation.
- Future versions will include more country rules.

---

## 📜 License
This package is open-source and licensed under the **MIT License**.

---

## 🔗 Contributing
We welcome contributions! If you find a bug or want to add more validation rules, feel free to:
1. Fork the repo.
2. Create a new branch.
3. Submit a pull request.

---

## 📬 Support
For any issues, open an issue on GitHub:  
🔗 **[GitHub Issues](https://github.com/byteweld/laravel-validation-rules/issues)**  

---

### 📢 Next Steps
✅ Add support for more countries  
✅ Add a configuration file for dynamic country validation  
✅ Improve test coverage
