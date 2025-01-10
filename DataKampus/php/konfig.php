<?php
include("Konek.php");

// CLASS SETTING CRUD
class Konfig extends Konek {

    // 1. FUNGSI SELECT ALL
    public function selectAll($nama_tabel) {
        $sql = "SELECT * FROM {$nama_tabel}";
        $query = mysqli_query($this->getConnection(), $sql);
        if (!$query) {
            die("Query Error: " . mysqli_error($this->getConnection()));
        }
        return $query;
    }

    // 2. FUNGSI SELECT WHERE
    public function selectWhere($nama_tabel, $field, $value) {
        $sql = "SELECT * FROM {$nama_tabel} WHERE {$field} = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    // 3. FUNGSI SIMPAN DATA (INSERT)
    public function simpan($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $values = array_values($data);

        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$placeholders})";
        $stmt = $this->getConnection()->prepare($sql);

        if (!$stmt) {
            die("Query Error: " . $this->getConnection()->error);
        }

        $types = str_repeat("s", count($values)); // Semua tipe data dianggap string
        $stmt->bind_param($types, ...$values);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // 4. FUNGSI EDIT DATA (UPDATE)
public function edit($nama_tabel, $f, $v, array $data) {
    $set = "";
    $values = [];
    $types = "";

    foreach ($data as $field => $value) {
        $set .= "$field = ?, ";
        $values[] = $value;
        $types .= "s"; // Semua tipe data dianggap string
    }

    $set = rtrim($set, ", ");

    $sql = "UPDATE $nama_tabel SET $set WHERE $f = ?";
    $values[] = $v;
    $types .= "s";

    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param($types, ...$values);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


    // 5. FUNGSI DELETE DATA
    public function hapus($nama_tabel, $field, $value) {
        $sql = "DELETE FROM {$nama_tabel} WHERE {$field} = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("s", $value);
        return $stmt->execute();
    }
}
?>
