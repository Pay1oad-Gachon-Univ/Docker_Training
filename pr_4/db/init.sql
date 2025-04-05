-- 컨테이너 시작 시 자동 실행됨
CREATE TABLE IF NOT EXISTS example (
    id INT AUTO_INCREMENT PRIMARY KEY,
    msg VARCHAR(100)
);
INSERT INTO example (msg) VALUES ('Hello from DB');
