package com.unipi.talepis.androidplh2022_3_t;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity2 extends AppCompatActivity {
    EditText countryName,countryCapital,countryPopulation;
    SQLiteDatabase db;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        countryName = findViewById(R.id.editTextTextPersonName2);
        countryCapital = findViewById(R.id.editTextTextPersonName3);
        countryPopulation = findViewById(R.id.editTextTextPersonName4);
        db = openOrCreateDatabase("CountryDB.db",MODE_PRIVATE,null);
        //db.execSQL("Drop table Country");
        db.execSQL("Create table if not exists Country(" +
                "CountryID integer primary key autoincrement," +
                "CountryName TEXT unique not null," +
                "CountryCapital TEXT," +
                "CountryPopulation integer" +
                ")");
        db.execSQL("Insert or ignore into Country(CountryID,CountryName,CountryCapital,CountryPopulation) values (" +
                "1,'Greece','Athens',10678632)");
        db.execSQL("Insert or ignore into Country(CountryID,CountryName,CountryCapital,CountryPopulation) values (" +
                "2,'Ukraine','Kyiv',41130432)");
        db.execSQL("Insert or ignore into Country(CountryID,CountryName,CountryCapital,CountryPopulation) values (" +
                "3,'Spain','Madrid',47326687)");
    }
    private void showMessage(String title, String message){
        new AlertDialog.Builder(this)
                .setTitle(title)
                .setMessage(message)
                .setCancelable(true)
                .show();
    }
    public void readall(View view){
        Cursor cursor = db.rawQuery("Select * from Country",null);
        StringBuilder builder = new StringBuilder();
        while (cursor.moveToNext()){
            builder.append("Country name: ").append(cursor.getString(1)).append("\n");
            builder.append("Country capital: ").append(cursor.getString(2)).append("\n");
            builder.append("Country population: ").append(cursor.getInt(3)).append("\n\n");
        }
        cursor.close();
        showMessage("Countries",builder.toString());
    }
    public void save(View view){
        String name = countryName.getText().toString();
        String capital = countryCapital.getText().toString();
        Integer population = Integer.valueOf(countryPopulation.getText().toString());
        db.execSQL("Insert into Country(CountryName,CountryCapital,CountryPopulation) values(?,?,?)",new Object[]{name,capital,population});
        Toast.makeText(this, "Data saved to database!", Toast.LENGTH_SHORT).show();
    }
    public void updatectr(View view){
        String name = countryName.getText().toString();
        String capital = countryCapital.getText().toString();
        Integer population = Integer.valueOf(countryPopulation.getText().toString());
        db.execSQL("UPDATE  Country SET  CountryCapital = ?,CountryPopulation = ? WHERE CountryName = ?",new Object[]{capital,population,name});
        Toast.makeText(this, "Data updated to database!", Toast.LENGTH_SHORT).show();
    }
    public void searchctr(View view){
        String name = countryName.getText().toString();
        Cursor cursor = db.rawQuery("Select * from Country Where CountryName = ?", new String[]{name});
        StringBuilder builder = new StringBuilder();
        while (cursor.moveToNext()){
            builder.append("Country name: ").append(cursor.getString(1)).append("\n");
            builder.append("Country capital: ").append(cursor.getString(2)).append("\n");
            builder.append("Country population: ").append(cursor.getInt(3)).append("\n\n");
        }
        cursor.close();
        showMessage("Countries",builder.toString());
    }
    public void deletectr(View view){
        String name = countryName.getText().toString();
        db.execSQL("DELETE FROM  Country WHERE CountryName = ?",new Object[]{name});
        Toast.makeText(this, "Data deleted from database!", Toast.LENGTH_SHORT).show();
    }
}