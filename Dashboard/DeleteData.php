<?php

function deleteData($conn, $tableName, $columnName, $inputValue) {
  $stmt = mysqli_prepare($conn, "DELETE FROM $tableName WHERE $columnName = ?");
  mysqli_stmt_bind_param($stmt, "s", $inputValue);

  if (mysqli_stmt_execute($stmt)) {
    if (mysqli_stmt_affected_rows($stmt) > 0) {
      echo "<p>Record deleted successfully.</p>";
      // Optional: Redirect after 1.7 seconds
      echo "<script>
        setTimeout(() => { window.location.href = 'http://localhost/ProjetWeb/Dashboard/' . $tableName . '.php'; }, 1700);
      </script>";
    } else {
      echo "<p>No records found with the given " . ucfirst($columnName) . ".</p>";
    }
  } else {
    echo "<p>Error deleting record: " . mysqli_error($conn) . "</p>";
  }

  mysqli_stmt_close($stmt);
}

?>
