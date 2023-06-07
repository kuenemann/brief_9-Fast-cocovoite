INSERT INTO user (
    id,
    email,
    roles,
    password,
    first_name,
    last_name,
    phone,
    created
  )
VALUES (
    id:int,
    'email:varchar',
    'roles:json',
    'password:varchar',
    'first_name:varchar',
    'last_name:varchar',
    'phone:varchar',
    'created:date'
  );