CREATE TABLE tx_books_domain_model_book (
    title VARCHAR(255) DEFAULT '' NOT NULL,
    year_of_publication INT(4) DEFAULT '0' NOT NULL,

    INDEX title(title)
);
