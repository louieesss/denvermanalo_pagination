<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>User Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 2rem;
      background: #fff;
      color: #000;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 1.5rem;
      font-weight: normal;
    }

    form.search-form {
      margin-bottom: 1rem;
      display: flex;
      max-width: 500px;
    }

    input[type="text"] {
      flex: 1;
      padding: 0.5rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 3px 0 0 3px;
      outline: none;
    }

    input[type="text"]:focus {
      border-color: #888;
    }

    button.search-btn {
      padding: 0.5rem 1rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-left: none;
      background: #eee;
      cursor: pointer;
      border-radius: 0 3px 3px 0;
    }

    a.create-record-btn {
      display: inline-block;
      margin-left: 1rem;
      padding: 0.5rem 1rem;
      background: #eee;
      color: #000;
      text-decoration: none;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 1rem;
      vertical-align: middle;
    }

    a.create-record-btn:hover {
      background: #ddd;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
      font-size: 0.95rem;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 0.5rem;
      text-align: center;
      vertical-align: middle;
    }

    th {
      background: #f0f0f0;
      font-weight: bold;
      text-transform: uppercase;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    .action-links a {
      color: #007BFF;
      text-decoration: none;
      margin: 0 0.25rem;
    }

    .action-links a:hover {
      text-decoration: underline;
    }

    .pagination-container {
      margin-top: 1.5rem;
      text-align: center;
    }

    .pagination-container a,
    .pagination-container strong {
      margin: 0 0.25rem;
      padding: 0.4rem 0.8rem;
      border: 1px solid #ccc;
      text-decoration: none;
      color: #000;
      font-size: 0.9rem;
      border-radius: 3px;
      display: inline-block;
    }

    .pagination-container strong {
      background: #ddd;
      font-weight: bold;
    }

    .logout-container {
      margin-top: 2rem;
      text-align: right;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
    }

    button.logout-btn {
      padding: 0.5rem 1rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      background: #eee;
      cursor: pointer;
      border-radius: 3px;
    }

    button.logout-btn:hover {
      background: #ddd;
    }

    @media (max-width: 600px) {
      form.search-form {
        flex-direction: column;
      }

      input[type="text"], button.search-btn {
        width: 100%;
        border-radius: 3px;
      }

      button.search-btn {
        margin-top: 0.5rem;
        border-left: 1px solid #ccc;
      }

      a.create-record-btn {
        display: block;
        margin: 1rem 0 0 0;
      }

      .logout-container {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Data Grid</h1>

    <div>
      <form action="<?= site_url('users/show'); ?>" method="get" class="search-form">
        <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
        <input type="text" name="q" placeholder="Search records..." value="<?= html_escape($q); ?>" id="searchBox">
        <button type="submit" class="search-btn">Search</button>
      </form>

      <?php $current_role = isset($_SESSION['role']) ? $_SESSION['role'] : ''; ?>
      <?php if ($current_role === 'admin'): ?>
        <a href="<?= site_url('users/create'); ?>" class="create-record-btn">Create New Record</a>
      <?php endif; ?>
    </div>

    <table id="studentsTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Email</th>
          <?php if ($current_role === 'admin'): ?>
          <th>Action</th>
          <?php endif; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach (html_escape($users) as $user): ?>
        <tr>
          <td><?= $user['id']; ?></td>
          <td><?= $user['last_name']; ?></td>
          <td><?= $user['first_name']; ?></td>
          <td><?= $user['email']; ?></td>
          <?php if ($current_role === 'admin'): ?>
          <td class="action-links">
            <a href="<?= site_url('users/update/'.$user['id']); ?>">Update</a> |
            <a href="<?= site_url('users/delete/'.$user['id']); ?>" class="delete-link" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
          </td>
          <?php endif; ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="pagination-container">
      <?php if (isset($page)) echo $page; ?>
    </div>

    <div class="logout-container">
      <?php if (isset($_SESSION['user_id'])): ?>
      <form action="<?= site_url('logout'); ?>" method="post" style="display: inline;">
        <button type="submit" class="logout-btn">Logout</button>
      </form>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>