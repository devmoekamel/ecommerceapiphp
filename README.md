
# E-Commerce API

Welcome to the E-Commerce API, a PHP-based API for managing e-commerce functionalities. This API provides various endpoints to perform operations related to products, users, and orders.



## Endpoints

### Products

#### Get All Products

```
GET /products
```

Retrieve a list of all products.

#### Get Product by ID

```
GET /products/{id}
```

Retrieve details of a specific product by its ID.

#### Create Product

```
POST /products
```

Create a new product.

**Request Body:**
```json
{
  "name": "Product Name",
  "description": "Product Description",
  "price": 9.99,
  "quantity": 10
}
```

#### Update Product

```
PUT /products/{id}
```

Update an existing product by its ID.

**Request Body:** Same as Create Product

#### Delete Product

```
DELETE /products/{id}
```

Delete a product by its ID.

### Users

#### Get All Users

```
GET /users
```

Retrieve a list of all users.

#### Get User by ID

```
GET /users/{id}
```

Retrieve details of a specific user by their ID.

#### Create User

```
POST /users
```

Create a new user.

**Request Body:**
```json
{
  "name": "User Name",
  "email": "user@example.com",
  "password": "password"
}
```

#### Update User

```
PUT /users/{id}
```

Update an existing user by their ID.

**Request Body:** Same as Create User

#### Delete User

```
DELETE /users/{id}
```

Delete a user by their ID.

### Orders

#### Get All Orders

```
GET /orders
```

Retrieve a list of all orders.

#### Get Order by ID

```
GET /orders/{id}
```

Retrieve details of a specific order by its ID.

#### Create Order

```
POST /orders
```

Create a new order.

**Request Body:**
```json
{
  "user_id": 1,
  "product_id": 1,
  "quantity": 1
}
```

#### Update Order

```
PUT /orders/{id}
```

Update an existing order by its ID.

**Request Body:** Same as Create Order

#### Delete Order

```
DELETE /orders/{id}
```

Delete an order by its ID.
