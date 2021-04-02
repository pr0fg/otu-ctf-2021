CREATE TABLE posts (
    id int,
    visible int,
    title varchar(255),
    content varchar(4096),
    PRIMARY KEY (id)
);
INSERT INTO posts VALUES(1, 1, 'New U.S. charges claim Huawei stole trade secrets, did business in North Korea', 'The U.S. Department of Justice has hit telecommunications giant Huawei with new charges, including stealing trade secrets and violating sanctions by doing business with North Korea. [...]');
INSERT INTO posts VALUES(2, 1, 'Coronavirus cases soar in China, but a new diagnosis method may explain it', 'China on Thursday reported 254 new deaths and a spike in virus cases of 15,152, after the hardest-hit province of Hubei applied a new classification system that broadens the scope of diagnoses for the outbreak, which has spread to more than 20 countries. [...]');
INSERT INTO posts VALUES(3, 1, 'Pressure Buffeting On Model S Reveals Tesla CPO Issues', 'Most of our readers know we are all in for promoting electric mobility. They also know we want early EV adopters to be protected from possible issues and that automakers treat them fairly. That leads these readers to tell us their problems in an attempt to make the story public and press the manufacturer to do the right thing. That was what happened with our reader Alec. He has a concerning pressure buffeting issue with his CPO 2016 Tesla Model S 90D. Together, we found out the problem was much worse than what it seemed to be. [...]');

CREATE TABLE chdh283 (
    flag varchar(255)
);
INSERT INTO chdh283 VALUES('Flag: 9df63cf52b6f255d0ce339dc9908a9d9');
